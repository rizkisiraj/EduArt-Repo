<?php
session_start();
$userAkun = '';
if(isset($_SESSION['login'])) {
    $userAkun = $_SESSION['nama'];
}
    echo '<nav class="navbar navbar-expand-lg">
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
                <a class="nav-link" aria-current="page" href="landing.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="courses.php">Kursus</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="articles.php">
                    Artikel
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="buatArtikel.php">
                    Buat Artikel
                </a>
                </li>
        </ul>
        <div class="me-lg-2">
            <a class="btn btn-success" href="keranjang.php">
            <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                '.$userAkun.'
            </a>

            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a class="dropdown-item" href="./profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="./logout.control.php">Logout</a></li>
            </ul>
        </div>
        </div>
    </div>
    </nav>'
?>