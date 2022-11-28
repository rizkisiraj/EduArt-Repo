<?php require_once('data.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/landing.css">
</head>
  <body>
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex px-4">
        <a class="navbar-brand d-block" href="#">
            <img width="120" src="./assets/Logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                Articles
            </a>
            </li>
        </ul>
        <button class="btn btn-sign-in btn-primary">
            Sign Up
        </button>
        </div>
    </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active satu w-full">
          <div class="container items-1">
            <div class="row align-items-center">
              <div class="col">
                <h2>Platform Terbaik Untuk Belajar Seni Online dan Offline</h2>
                <p>Belajar musik sesuai dengan yang kamu mau</p>
                <div>
                  <a class="btn btn-primary">
                    Explore Course
                  </a>
                  <a class="btn btn-danger">
                    See Articles
                  </a>
                </div>
              </div>
              <div class="col">
                <img src="./assets/Saly-13.png" alt="carousel satu">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active dua w-full">
          <div class="container items-1">
            <div class="row align-items-center">
              <div class="col">
                <h2>Platform Terbaik Untuk Belajar Seni Online dan Offline</h2>
                <p>Belajar musik sesuai dengan yang kamu mau</p>
                <div>
                  <a class="btn btn-primary">
                    Explore Course
                  </a>
                  <a class="btn btn-danger">
                    See Articles
                  </a>
                </div>
              </div>
              <div class="col">
                <img src="./assets/Saly-13.png" alt="carousel satu">
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item active tiga w-full">
          <div class="container items-1">
            <div class="row align-items-center">
              <div class="col">
                <h2>Platform Terbaik Untuk Belajar Seni Online dan Offline</h2>
                <p>Belajar musik sesuai dengan yang kamu mau</p>
                <div>
                  <a class="btn btn-primary">
                    Explore Course
                  </a>
                  <a class="btn btn-danger">
                    See Articles
                  </a>
                </div>
              </div>
              <div class="col">
                <img src="./assets/Saly-13.png" alt="carousel satu">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    <section class="container px-4 mt-5">
      <div class="row text-center">
        <h2>Browse Our Courses</h2>
      </div>
      <div class="row content-container rounded-top justify-content-center">
      <?php
          for ($i=0; $i < count($courses); $i++) { 
            echo "<div class='col'>
            <div class='card mx-auto' style='width: 18rem;'>
              <img src='https://picsum.photos/200' class='card-img-top' alt='card-img' height='180px'>
              <div class='card-body'>
                <h5 class='card-title'>".$courses[$i]["card_title"]."</h5>
                <p class='card-text'>".$courses[$i]["writer"]."</p>
                <a href='#' class='btn btn-primary'>Pilih</a>
              </div>
            </div>
          </div>";
          }
        ?>
      </div>
    </section>
    <section class="container px-4 mt-5">
      <div class="row text-center">
        <h2>Browse Our Articles</h2>
      </div>
      <div class="row content-container rounded-top justify-content-center">
      <?php
          for ($i=0; $i < count($courses); $i++) { 
            echo "<div class='col'>
            <div class='card mx-auto' style='width: 18rem;'>
              <img src='https://picsum.photos/200' class='card-img-top' alt='card-img' height='180px'>
              <div class='card-body'>
                <h5 class='card-title'>".$courses[$i]["card_title"]."</h5>
                <p class='card-text'>".$courses[$i]["writer"]."</p>
              </div>
            </div>
          </div>";
          }
        ?>
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
  </body>
</html>